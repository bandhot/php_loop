<?php 

// nomer 1
function satu ()
{
    
    for($x=1;$x<=10;$x++)
    {
        if($x>3 && $x<8)
        {
            continue;
        }else{
            echo $x." ";
        }
    }
    
}
satu();

echo PHP_EOL;

// nomer 2
function dua()
{

    
    for ($x=5;$x>=1;$x--)
    {
        if($x==5 || $x==3)
        {
            echo " $x " ;
            continue;
        }
        elseif($x<3)
        {
            echo " * " ;
            continue;
        }
        else{
            
            echo $x;
        }
    }
}
dua();

echo PHP_EOL;

// nomor 3
function tiga ()
{
    
   for($a=1;$a<=4;$a++)
   {
       if($a %2 ==0)
       {
           echo $a."b  ";   
       }else{
           echo $a."a  ";
           
       }
    }
    
}

tiga();


echo PHP_EOL;

// nomor 4

function empat ()
{

    for($e=1;$e<8;$e++)
    {
        if($e>3 && $e<7)
        {
            echo " A ";
        }else{
            echo $e."  ";
        }
    }
}

empat();
echo PHP_EOL;

// nomer 5

function lima ()
{

    
    for($a=4; $a>=0; $a--)
    {
        
         if($a==2 || $a==0 )
         {
             echo "A";
             continue;
         }
        echo $a."";
    }
}
lima();

  echo PHP_EOL;  

// nomer 6
function enam ()
{

    
    for($r=0;$r<=4;$r++)
    {
        if($r==0 || $r==1)
        {
            echo "A";
            continue;
        }
        echo $r;
    }
}

enam();
