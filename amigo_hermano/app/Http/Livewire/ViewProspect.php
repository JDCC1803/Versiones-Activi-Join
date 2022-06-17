<?php

namespace App\Http\Livewire;
use App\Models\Hijo;
use App\Models\Activitie;
use App\Models\User;
use Livewire\Component;

class ViewProspect extends Component
{
    public function render()
    {
        $hmenor=Hijo::all()->where('padre_id',Auth()->user()->id);
        return view('livewire.view-prospect',['new'=>$hmenor]);
    }
    public function destroy($id){

        if ($id){
            $menor= Hijo::where('id',$id);
            $menor->delete();
        }      
       
    }
}
