function age()
{
    var a = prompt("quel age avez-vous?");
     
           if(!a)
           {
               document.url("menu2.html");//action a faire si l'utilisateur ne rentre rien
           }
            
           else if(isNaN (a))
           {
               alert("Ce n'est pas un nombre");
               age();
                                
           }
            
           else if(a==0)
           {
               alert("Tu as 0 an? Vraiment?");
               age();
           }
     
           else if(a>=18)
           {
               window.open ("http://www.yahoo.fr");
           }
         else
           {
               window.open ("http://www.google.fr");
           }
         
}