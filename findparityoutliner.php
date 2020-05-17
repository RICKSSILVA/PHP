function find($integers) {
$contar= count($integers);
$contarpar=0;
$contarimpar=0;
if ($contar >=3)
{for ($num=0;$num<$contar;$num++)
  { 
    if ($integers[$num]%2==0)
       { $contarpar++;}
    else
        {$contarimpar++;}
   }
   
   
   if ($contarpar > $contarimpar)
         {
           for ($num=0;$num<$contar;$num++)
              {  
             
                 if (($integers[$num]%2==1) or ($integers[$num]%2==-1))
       
                      { return $integers[$num];}
               }
          }
   else
       {    
              for($num=0;$num<$contar;$num++)
                  {    if ($integers[$num]%2==0)
              
                      { return $integers[$num];}
                  }
       }  
}
}