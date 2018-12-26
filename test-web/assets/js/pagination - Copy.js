/*
This method will initialize each slider instance.
Parameter are: -
------------------
1) container -> div.slider ul
2) pagicontainer -> div.pagi-container ul
3) nav -> #slider-nav
*/
function slider(container, pagicontainer, nav){
	this.container=container;
	this.pagicontainer=pagicontainer;
	this.nav=nav.hide(); // This will assign 'nav' from parameters to 'nav' of current slider instance. It uses method chaining.
	this.imgs=this.container.find('.slides'); // Returns jQuery object containing all matched elements.
    // Following commented line will not work here, as DIVs are Dynamic by nature unlike images where dimensions are known at "PageLoad( )" event.
	// this.width=this.imgs[0].width;
	this.width=640; // Only add contents within this limit. Longer sentences will be continued on next Line.
	console.log('Value of width is : '+this.width);
	this.imgLen=this.imgs.length; // Returns the total number of sliding elements.
	console.log("Total no. of Items in the list are : "+this.imgLen);
	// Here we will fill the Pagination with the following list.
	out = "";
	cnt=0;
	this.liArr = $(container).find('li');// Returns jQuery object containing all matched LI elements.
	this.liArr.each(function() 
	{
        out += "<li><a data-pgno='"+cnt+"'>" + (cnt+1) + "</a></li>"; // Here (CNT+1) is displayed on the WebPage, But the "pgno" attribute starts from ZERO only.
		cnt++;
    });
		
	this.pagicontainer.html(out); // Adding the List to the Pagination Container.
	this.current=0; // Initialize the "current" counter.
	// Apply CSS to "First" pagination element in the list.
	this.pagicontainer.find('li').find("[data-pgno='" + this.current + "']").css({
      border : "2px solid grey",
	  fontWeight: "900",
	  fontSize:"18px"
    });	
}

// This method will apply the needed animation and displacement.

slider.prototype.transition=function(coords){
	this.container.animate({
		'margin-left': coords || -(this.current*this.width) // First element is multiplied by Zero.
	},500);
	// Remove CSS from Rest other pagination element in the list.
	this.pagicontainer.find('li a').css({
      border : "none",
	  fontWeight:"",
	  fontSize:""
    });
	// Apply CSS to current pagination element in the list.
	this.pagicontainer.find('li').find("[data-pgno='" + this.current + "']").css({
      border : "2px solid grey",
	  fontWeight:"900",
	  fontSize:"18px"
    });	
};

// This method will set the "current" counter to next position.
/*
Parameters are:-
---------------
1) dir -> It can be either 'prev' or 'next' or else a number denoting slides.
*/
slider.prototype.setCurrentPos=function(dir){
	var pos=this.current;
	console.log('Value of this.value is : '+dir);
	if(isNaN(dir))
	{
		pos+= ~~(dir=='next') || -1; // You can use alternate "Math.floor()" method instead of double tilde (~~) operator.
		this.current=(pos<0)?this.imgLen-1: pos%(this.imgLen);
	}
	else
		this.current=Number(dir);
	console.log(this.current);
	
};