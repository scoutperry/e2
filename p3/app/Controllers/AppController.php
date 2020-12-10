<?php
namespace App\Controllers;

class AppController extends Controller
{

    public function index()
    {
        //do i need all this?
        $name = $this->app->old('name');
        $Apick = $this->app->old('Apick');
        $Bpick = $this->app->old('Bpick');
        $APenny = $this->app->old('APenny');
        $BPenny = $this->app->old('BPenny');
        $result = $this->app->old('result');
        $winner = $this->app->old('winner');


        return $this->app->view('index', [
            'name' => $name,
            'Apick' => $Apick,
            'Bpick' => $Bpick,
            'APenny' => $APenny,
            'BPenny' => $BPenny,
            'result' => $result,
            'winner' => $winner,
        ]);
    }

    public function history()
    {
        return $this->app->view('history', [
            'rounds' => $this->app->db()->all('rounds')
            ]);            
    }

    public function round()
    {
        $id = $this->app->param('id');

        if(is_null($id)){
            $this->app->redirect('/history');
        }

        $round = $this->app->db()->findById('rounds', $id);

        //Come back to this later!!!!!
       /* if(is_null($round)){
            return $this->app->view('missing', ['id' => $id]);
        }*/
        

        return $this->app->view('rounds',[
            'round' => $round,
        ]);
    }

    public function play()
    {
        $this->app->validate([
            'name' => 'required',
          ]);
        
        function flipPenny() {
            $penny = ['heads', 'tails'];
            return $penny[rand(0,1)];
        }

        $name = $this->app->input('name');
        $Apick = $this->app->input('Apick','odd');
        $Bpick= ($Apick == 'odd') ? 'even' : 'odd';
        $APenny = flipPenny();
        $BPenny = flipPenny();
        $result = ($APenny == $BPenny) ? 'even' : 'odd';
        $winner = ($result == $Apick) ? $name : 'Player B';

        //persist to database!!!!
        $data = [
            'name' => $name,
            'Apick' => $Apick,
            'Bpick' => $Bpick,
            'APenny' => $APenny,
            'BPenny' => $BPenny,
            'result' => $result,
            'winner' => $winner,
            'time' => time('Y-m-d H:i:s'),
        ];
    
        $this->app->db()->insert('rounds', $data);

        //is this necessary?
        
        $this->app->redirect('/', [
            'name' => $name,
            'Apick' => $Apick,
            'Bpick' => $Bpick,
            'APenny' => $APenny,
            'BPenny' => $BPenny,
            'result' => $result,
            'winner' => $winner,

            ]);
            

    } 
}