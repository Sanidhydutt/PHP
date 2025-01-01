<?php 
trait hell
{
    public function hello()
    {
        echo("<br> Hello From Hello Trait");
    }
}

trait hyy
{
    public function hello()
    {
        echo("<br> Hello From Hyy Trait");
    }
}

class A
{
    use hell,hyy
    // {
    //     hell::hello insteadOf hyy;
    // }
    {
        hyy::hello insteadOf hell;
        hell::hello as newhell;
    }
}
$a1 = new A();

$a1->hello();

$a1->newhell();
?>

<?php 
trait h1
// hell
{
    public function hello()
    {
        echo("<br> Hello From H1 Trait");
    }
}

trait h2
// hyy
{
    public function hello()
    {
        echo("<br> Hello From H2 Trait");
    }
}

class A
{
    use h1,h2
    {
        // h2::hello insteadOf h1;
        // h1::hello as nh3;
    }
}
$a1 = new A();

$a1->hello();

//$a1->nh3();
?>
