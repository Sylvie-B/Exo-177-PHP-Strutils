<?php


class StrUtils
{
    private $str;

    public function __construct(string $str){
        $this->setStr($str);
    }

    public function setStr ($str) : void {
        $this->str = $str;
    }

    public function getStr(){
        return $this->str;
    }

    public function bold(): String {
        return "<strong>".$this->getStr()."</strong>";
    }

    public function italics(): String {
        return "<em>".$this->getStr()."</em>";
    }

    public function under(): String {
        return "<p style='text-decoration: underline'>".$this->getStr()."</p>";
    }

    public function capitalize() : String {
        return "<p style='text-transform: capitalize'>".$this->getStr()."</p>";
    }

    public function uglify(): String {
        return "<strong><em><p style='text-decoration: underline; text-transform: capitalize'>".$this->getStr()."</p></em></strong>";
    }

}
