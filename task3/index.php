<?php

class Emitter
{
    private $observers = [];
    /**
     * Создает экземпляр класса Emitter.
     * @memberof Emitter
     */
    public function __constructor()
    {
        // Ваш код
    }

    /**
     * связывает обработчик с событием
     *
     * @param string event - событие
     * @param Handler handler - обработчик
     */
    public function on($event, $handler)
    {
        $this->observers[$event][] = $handler;
    }

    /**
     * Генерирует событие -- вызывает все обработчики, связанные с событием и
     *                       передает им аргумент data
     *
     * @param string event
     * @param mixed data
     */
    public function emit($event, $data)
    {
        if(array_key_exists($event, $this->observers)){
            foreach($this->observers[$event] as $e){
                if(is_callable($e)){
                    $e($data);
                }
            }
        }
    }
}
