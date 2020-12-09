<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
    */

    public function index()
    {
        $Apick = $this->app->old('Apick');
        $Bpick = $this->app->old('Bpick');
        $APenny = $this->app->old('APenny');
        $BPenny = $this->app->old('BPenny');
        $result = $this->app->old('result');
        $winner = $this->app->old('winner');


        return $this->app->view('index', [
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
        dump('This is the History page');
        
    }

    public function round()
    {
        dump('This is the Round page');

    }

    public function play()
    {
          //dump($_POST);
          //Check function within function
        function flipPenny() {
            $penny = ['heads', 'tails'];
            return $penny[rand(0,1)];
        }

        $Apick = $this->app->input('Apick','odd');
        $Bpick= ($Apick == 'odd') ? 'even' : 'odd';
        $APenny = flipPenny();
        $BPenny = flipPenny();
        $result = ($APenny == $BPenny) ? "even" : "odd";
        $winner = ($result == $Apick) ? "You" : "Player B";

        //persist to database!!!!
        /*$data = [
            'Apick' => $Apick,
            'Bpick' => $Bpick,
            'APenny' => $APenny,
            'BPenny' => $BPenny,
            'result' => $result,
            'winner' => $winner,
        ];
    
        $this->app->db()->insert('rounds', $data);*/

        $this->app->redirect('/', [
            'Apick' => $Apick,
            'Bpick' => $Bpick,
            'APenny' => $APenny,
            'BPenny' => $BPenny,
            'result' => $result,
            'winner' => $winner,

            ]);




    /*
        function flipPenny() {
            $penny = ['heads', 'tails'];
            return $penny[rand(0,1)];
        }

        //$Apick = array_pop($coinSides);
        $coinSides = ['odd', 'even'];
        shuffle($coinSides);

        $Apick = $this->app->input('Apick','odd');
        //$Apick= $POST['Apick'];
        $Bpick= ($Apick == 'odd') ? 'even' : 'odd';
        $APenny = flipPenny();
        $BPenny = flipPenny();
        $result = ($APenny == $BPenny) ? "even" : "odd";
        $winner = ($result == $Apick) ? "You" : "Player B";
        
        return $this->app->view('index',[
            'Apick' => $Apick,
            'APenny' => $APenny,
            'BPenny' => $BPenny,
            'Bpick' => $Bpick,
            'result' => $result,
            'winner' => $winner,

        ]);
        $this->app->redirect('/');
        */
    } 
}