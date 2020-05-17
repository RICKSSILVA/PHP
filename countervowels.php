function getCount($str) {
  $vowelsCount = 0;
$c=strlen($str);
$nome=$str;

for ($b=0; $b<=$c;$b++)
{
  //echo $nome[$b]."\n";

  
if ($nome[$b]=="a")
  {
  $vowelsCount++;
  }
   if($nome[$b]=="e")
   
   { $vowelsCount++;}
   
    if($nome[$b]=="i")
    
    {$vowelsCount++;}
    
   if($nome[$b]=="o")
    
    {$vowelsCount++;}
   
   if($nome[$b]=="u")
    
    {$vowelsCount++;}
}
  return $vowelsCount;
}