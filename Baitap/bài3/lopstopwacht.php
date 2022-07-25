<?php
class StopWatch{
    private $startTime;
    private $endTime;
    public function getStarTime(){
        return $this->startTime;
    }
    public function getEndTime(){
        return $this->endTime;
    }
    public function start(){
        $this->startTime=microtime(true);
    }
    public function stop(){
        $this->endTime=microtime(true);
    }
    public function getElapsedTime(){
        echo $this->endTime - $this->startTime;
    }
    }
    $time=new Stopwatch();
    $time->start();
    usleep(1000000);
    $time->stop();
    $time->getElapsedTime();

?>