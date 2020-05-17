unction is_prime(int $n): bool {
  
  
  $teste=$n;
  
  if ($teste>=2)
  
     { 
         if ($teste==2 || $teste==5)
        
            { return (true);
             }
         else
            {     
               if ($teste%2==0)
           
                   {return (false);
             
                   }
               else
                   {
                        
                      $num=1;
                      $contador=0;
                      
                      for ($num=1;$num<=$teste;$num++)
                        {        
                         
                              if ($teste%$num==0)
                                 {
                                   $contador++;
                                 
                                 }
                              //   $num=$num+2;
                                 if($contador>2)
                                 
                                 { $num=$teste;
                                   return (false);
                                 }
                                 
                            
                          }  
                             
                              
                              return(true);
                                
                             
                    }
                          
                     
                   
            }
   
           
    }
  
  else
  
    { return (false);
    }
    
    
  
}