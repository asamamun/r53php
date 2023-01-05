<h1>
An abstract class is a class that really isn’t supposed to ever be instantiated but instead serves as a base class to be inherited by other classes.
মানে হচ্ছে, abstract ক্লাস এর অব্জেক্ট তৈরি হবে না কিন্তু অন্য ক্লাস এদেরকে ব্যবহার করবে জাস্ট লাইক ইন্টারফেস অর প্যারেন্ট ক্লাস।
</h1>
<?php
interface iA{}
interface iB{}
interface iC{}
abstract class Media
{
 private $title;
 function setTitle($title) {
 $this->title = $title;
 }
 abstract function setDescription($description);
}
// $m = new Media(); // X
class Newspaper extends Media implements iA,iB,iC
{
 function setDescription($description) {
 }
 function setSubscribers($subscribers) {
 }
}