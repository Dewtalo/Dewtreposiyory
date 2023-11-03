<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Models\User;
use App\Models\Place;
use Livewire\Component;

class Users extends Component
{


    public function message($userId)
    {

      //  $createdConversation =   Conversation::updateOrCreate(['sender_id' => auth()->id(), 'receiver_id' => $userId]);

      $authenticatedUserId = auth()->id();

      # Check if conversation already exists
      $existingConversation = Conversation::where(function ($query) use ($authenticatedUserId, $userId) {
                $query->where('sender_id', $authenticatedUserId)
                    ->where('receiver_id', $userId);
                })
            ->orWhere(function ($query) use ($authenticatedUserId, $userId) {
                $query->where('sender_id', $userId)
                    ->where('receiver_id', $authenticatedUserId);
            })->first();
        
      if ($existingConversation) {
          # Conversation already exists, redirect to existing conversation
          return redirect()->route('chat', ['query' => $existingConversation->id]);
      }
  
      # Create new conversation
      $createdConversation = Conversation::create([
          'sender_id' => $authenticatedUserId,
          'receiver_id' => $userId,
      ]);
 
        return redirect()->route('chat', ['query' => $createdConversation->id]);
        
    }


    public function render(Request $request)
    {
        $search_about_me = $request->input('about_me');
        $search_place = $request->input('place');
        $search_category = $request->input('category');
        
        $query = User::query();
        if(!empty($search_about_me) || !empty($search_place) || !empty($search_category)) {
            $query->select('users.*', 'place_user.id as place_user_id', 'place_user.place_id');
            $query->leftJoin('place_user', function ($query) {
                $query->on('users.id', '=', 'place_user.user_id');
            });
        }
        
        
        
        if(!empty($search_about_me)) {
            $query->where('about_me', 'LIKE', "%{$search_about_me}%");
        }
        
        if(!empty($search_place)) {
            $query->where('place_id', 'LIKE', $search_place);
        }

        if(!empty($search_category)) {
            $query->where('category', 'LIKE', "%{$search_category}%");
        }
        $items = $query->get();
        $places = Place::all();
        $user_list = User::all();  #いるかわからん
        return view('livewire.users', compact('items', 'search_category', 'search_place', 'places', 'user_list', 'search_about_me'));
            
        return view('livewire.users', [
            'users' => User::where('id', '!=', auth()->id())->get()
        ]);
    }
}
