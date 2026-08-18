$(window).load(function() { 
 
    var InfiniteRotator =
    {
        init: function()
        {
            //interval between items (in milliseconds)
            var itemInterval = 1000;
            //cross-fade time (in milliseconds)
            var fadeTime = 500;
            //count number of items
            var numberOfItems = $('.plans .notext').length;
            //set current item
            var currentItem = 0;
            //show first item
            $('.plans .notext').eq(currentItem).attr('class', 'notext current');
 
            //loop through the items
            var infiniteLoop = setInterval(function(){
                $('.plans .notext').eq(currentItem).attr('class', 'notext current');
 
                if(currentItem == numberOfItems -1){
                    currentItem = 0;
                }else{
                    currentItem++;
                }
                $('.plans .notext').eq(currentItem).attr('class', 'notext');

            }, itemInterval);
        }
    };
    InfiniteRotator.init();
});





function calcthis()
{ 
  var planperc=new Array(0,0,0,0,0);
  var depo = document.getElementById("deposit").value;
  var perc = document.getElementById("percent").value;

// =========================================================================================================================











// PLAN 1 ===================================================================================================================
if (perc == "perc1")  {planperc=Array(102.2,105,120,120,120)
  if (depo < 10)
	{alert ("Minimal deposit for this plan is $10"); document.getElementById("deposit").value = 10; calcthis();}
	else
	{
	if (depo > 100000)
	  {alert ("Maximal deposit for this plan  is $100000"); document.getElementById("deposit").value = 100000; calcthis();}
	  else
	  {
	  if (depo < 5001)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 10001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 100001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 100001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
		}
	  }
	}
	}
	}
};   
// PLAN 2 ===================================================================================================================
if (perc == "perc2")  {planperc=Array(141,177,210,210,210)
  if (depo < 10)
	{alert ("Minimal deposit for this plan is $10"); document.getElementById("deposit").value = 10; calcthis();}
	else
	{
	if (depo > 75000)
	  {alert ("Maximal deposit for this plan  is $75000"); document.getElementById("deposit").value = 75000; calcthis();}
	  else
	  {
	  if (depo < 2501)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 5001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 75001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 75001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
		}
	  }
	}
	}
	}
};   
// PLAN 3 ===================================================================================================================
if (perc == "perc3")  {planperc=Array(165,242,310,310,310)
 if (depo < 10)
	{alert ("Minimal deposit for this plan is $10"); document.getElementById("deposit").value = 10; calcthis();}
	else
	{
	if (depo > 50000)
	  {alert ("Maximal deposit for this plan  is $50000"); document.getElementById("deposit").value = 50000; calcthis();}
	  else
	  {
	  if (depo < 2501)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 5001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 50001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 50001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
		}
	  }
	}
	}
	}
};   

// PLAN 4 ===================================================================================================================
if (perc == "perc4")  {planperc=Array(195,377,520,520,520)
  if (depo < 10)
	{alert ("Minimal deposit for this plan is $10"); document.getElementById("deposit").value = 10; calcthis();}
	else
	{
	if (depo > 50000)
	  {alert ("Maximal deposit for this plan  is $50000"); document.getElementById("deposit").value = 50000; calcthis();}
	  else
	  {
	  if (depo < 2501)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 5001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 50001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 50001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
		}
	  }
	}
	}
	}
};   
// PLAN 5 ===================================================================================================================
if (perc == "perc5")  {planperc=Array(275,545,850,850,850)
  if (depo < 10)
	{alert ("Minimal deposit for this plan is $10"); document.getElementById("deposit").value = 10; calcthis();}
	else
	{
	if (depo > 50000)
	  {alert ("Maximal deposit for this plan  is $50000"); document.getElementById("deposit").value = 50000; calcthis();}
	  else
	  {
	  if (depo < 2001)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 4001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 50001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 50001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
		}
	  }
	}
	}
	}
}; 
// PLAN 6 ===================================================================================================================
if (perc == "perc6")  {planperc=Array(371,775,1190,1190,1190)
  if (depo < 10)
	{alert ("Minimal deposit for this plan is $10"); document.getElementById("deposit").value = 10; calcthis();}
	else
	{
	if (depo > 50000)
	  {alert ("Maximal deposit for this plan  is $50000"); document.getElementById("deposit").value = 50000; calcthis();}
	  else
	  {
	  if (depo < 1501)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 4001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 50001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 50001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
		}
	  }
	}
	}
	}
};   
// PLAN 7 ===================================================================================================================
if (perc == "perc7")  {planperc=Array(695,1345,2000,2000,2000)
   if (depo < 10)
	{alert ("Minimal deposit for this plan is $10"); document.getElementById("deposit").value = 10; calcthis();}
	else
	{
	if (depo > 30000)
	  {alert ("Maximal deposit for this plan  is $30000"); document.getElementById("deposit").value = 30000; calcthis();}
	  else
	  {
	  if (depo < 1001)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 3001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 30001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 30001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
		}
	  }
	}
	}
	}
};


// PLAN 8 ===================================================================================================================
if (perc == "perc8")  {planperc=Array(1000,1641,3000,3000,3000)
   if (depo < 10)
	{alert ("Minimal deposit for this plan is $10"); document.getElementById("deposit").value = 10; calcthis();}
	else
	{
	if (depo > 25000)
	  {alert ("Maximal deposit for this plan  is $25000"); document.getElementById("deposit").value = 25000; calcthis();}
	  else
	  {
	  if (depo < 501)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 1001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 25001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 25001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
		}
	  }
	}
	}
	}
};

// PLAN 9 ===================================================================================================================
if (perc == "perc9")  {planperc=Array(2050,4800,4800,4800,4800)
   if (depo < 10)
	{alert ("Minimal deposit for this plan is $10"); document.getElementById("deposit").value = 10; calcthis();}
	else
	{
	if (depo > 15000)
	  {alert ("Maximal deposit for this plan  is $15000"); document.getElementById("deposit").value = 15000; calcthis();}
	  else
	  {
	  if (depo < 501)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 50001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 50001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 50001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
		}
	  }
	}
	}
	}
};
// PLAN 10 ===================================================================================================================
if (perc == "perc10")  {planperc=Array(245,400,1300,3000,3000)
   if (depo < 10)
	{alert ("Minimal deposit for this plan is $10"); document.getElementById("deposit").value = 10; calcthis();}
	else
	{
	if (depo > 15000)
	  {alert ("Maximal deposit for this plan  is $15000"); document.getElementById("deposit").value = 15000; calcthis();}
	  else
	  {
	  if (depo < 201)
		{
  
		  document.getElementById("inpvar1").innerHTML = planperc[0];
		  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
		}
		else
		{
		  if (depo < 501)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[1];
			  document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
			}
			else
		{
		  if (depo < 1001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[2];
			  document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			}
			else
		{
		  if (depo < 15001)
			{
			  document.getElementById("inpvar1").innerHTML = planperc[3];
			  document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
			}
			
			else
			{
			  document.getElementById("inpvar1").innerHTML = planperc[4];
			  document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
			}
		}
	  }
	}
	}
	}
};
  
}; // function