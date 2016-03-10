<?php
header("Content-type:text/html; charset=utf-8");
/*
 * php多态的体现
 * 定义一个形状的接口 里面有两个抽象的方法让子类去实现
 */	
interface Shape{
	function area();
	function perimeter();
}

class Rect implements Shape{
	private $width;
	private $height;
	function __construct($width, $height){
		$this->width = $width;
		$this->height = $height;
	}
	
	function area(){
		return "矩形的面积：".$this->width*$this->height;
	}
	function perimeter(){
		return "矩形的周长：".($this->width+$this->height)*2;
	}
}

class Circle implements Shape{
	private $radius;
	
	function __construct($radius){
		$this->radius = $radius;
	}
	
	function area(){
		return "矩形的面积：". (3.14 * $this->radius * $this->radius);

	}
	function perimeter(){
		return "矩形的周长：".(2 * 3.14 * $this->radius);
	}
}


// 把子类矩形对象赋给形状的一个引用

$shape = new Rect(5, 10);

echo $shape->area() . "<br>";

echo $shape->perimeter() . "<br>";

 
// 把子类圆形对象赋给形状的一个引用

$shape = new Circle(10);
$ob1 =serialize($shape);  //序列化
$ob2=unserialize($ob1);   //反序列化


echo $shape->area() . "<br>";

echo $shape->perimeter() . "<br>";

?>