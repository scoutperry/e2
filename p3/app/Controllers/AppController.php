<?php
namespace App\Controllers;

class AppController extends Controller
{

    public function index()
    {
        $name = $this->app->old('name');
        $aPick = $this->app->old('aPick');
        $bPick = $this->app->old('bPick');
        $aPenny = $this->app->old('aPenny');
        $bPenny = $this->app->old('bPenny');
        $result = $this->app->old('result');
        $winner = $this->app->old('winner');


        return $this->app->view('index', [
            'name' => $name,
            'aPick' => $aPick,
            'bPick' => $bPick,
            'aPenny' => $aPenny,
            'bPenny' => $bPenny,
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
        $aPick = $this->app->input('aPick','odd');
        $bPick= ($aPick == 'odd') ? 'even' : 'odd';
        $aPenny = flipPenny();
        $bPenny = flipPenny();
        $result = ($aPenny == $bPenny) ? 'even' : 'odd';
        $winner = ($result == $aPick) ? $name : 'Player B';

        $data = [
            'name' => $name,
            'aPick' => $aPick,
            'bPick' => $bPick,
            'aPenny' => $aPenny,
            'bPenny' => $bPenny,
            'result' => $result,
            'winner' => $winner,
            'time' => time('Y-m-d H:i:s'),
        ];
    
        $this->app->db()->insert('rounds', $data);

        
        $this->app->redirect('/', [
            'name' => $name,
            'aPick' => $aPick,
            'bPick' => $bPick,
            'aPenny' => $aPenny,
            'bPenny' => $bPenny,
            'result' => $result,
            'winner' => $winner,

            ]); 
            

    } 
}