<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Slot;
use App\Models\Book;

class BookController extends Controller
{
    public function book_park(Request $request)
    {
      $slot = Slot::where('status',   'Available')->first();
      if ($slot == null) {
         return response()->json(['error'=>'No Slots Available for This Park']);
      }
      
       $slot->status ='Unvailable';
       $slot->update();
       $book= new Book();
       $book->user_id = $request->user_id;
       $book->car_id = $request->car_id;
       $book->slot_id = $slot->id;
       $book->Park_Type = $request->Park_Type;
       $hours = $request->hours;
       $book->startTime_book = Carbon::now();
       $book->endTime_book = Carbon::now()->addHour(intval($hours));
       $result=$book->save();
       return $book;
    }



    public function calculate_parkTime($id)
    {
       $book=Book::find($id);
       $current_time=Carbon::now();
       $remaining_time = $current_time->diffInminutes( $book->endTime_book);
       return $remaining_time;
    }

    public function extend_parkingTime(Request $request,$id)
    {
       $book=Book::find($id);
       $carbonDate = Carbon::parse($book->endTime_book);
       $book->endTime_book=  $carbonDate->addHour(intval($request->hours));
      $stuts=$book->update([
         'endTime_book'=>$carbonDate,
      ]);
      if($stuts){
         $newBook=Book::find($id);
         $newBook->message='Add Time [-'.$request->hours.'-] Successfully . . .';
         return $newBook;
      }
      return 'oops..!!, You Can Not Add Time .';
    }
}
