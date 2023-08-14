// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	
});

function selectPage() {

	$('#home').show();
	$('#about').hide();
	$('#models').hide();
	$('#interaction').hide();
	$('#cokeDescription').hide();
	$('#spriteDescription').hide(); 
	$('#pepperDescription').hide(); 


	$('#navHome').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 	  
	});

	$('#navAbout').click(function(){
		$('#home').hide();
		$('#about').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 	  
	});

	$('#navModels').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 
		$('#cokeDescription').show();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide();
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").hide();
		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").hide(); 
	});
}
function fantaDescription() { 
	$("button").click(function(){
		 
		$("#fantaDescription").show();
		$("#cokeDescription").hide();
		$("#spriteDescription").hide();
		$("#pepperDescription").hide();

		$("#x3dModelTitle_fanta").show();
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").hide();

		$("#x3dCreationMethod_fanta").show();
		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").hide();
	})
	}

function cokeDescription() {
	$("button").click(function(){
		
		$("#fantaDescription").hide();
		$("#cokeDescription").show();
        $("#spriteDescription").hide();
		$("#pepperDescription").hide();
		
		$("#x3dModelTitle_fanta").hide();
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").hide();

		$("#x3dCreationMethod_fanta").hide();
		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").hide();

    }); 
}

function spriteDescription() {
    $("button").click(function(){
        
		$("#fantaDescription").hide();
        $("#cokeDescription").hide();
        $("#spriteDescription").show();
		$("#pepperDescription").hide();
		
		$("#x3dModelTitle_fanta").hide();
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").show();
		$("#x3dModelTitle_pepper").hide();

		$("#x3dCreationMethod_fanta").hide();
		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").show();
		$("#x3dCreationMethod_pepper").hide();
    }); 
}

function pepperDescription() {
    $("button").click(function(){
		$("#fantaDescription").hide();
        $("#cokeDescription").hide();
        $("#spriteDescription").hide();
		$("#pepperDescription").show();
		
		$("#x3dModelTitle_fanta").hide();
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").show();

		$("#x3dCreationMethod_fanta").hide();
		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").show();
    }); 
}

function pepperDescription() {
    $("button").click(function(){

		$("#fantaDescription").hide();
        $("#cokeDescription").hide();
        $("#spriteDescription").hide();
		$("#pepperDescription").show();
		
		$("#x3dModelTitle_fanta").hide();
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").show();
        
		$("#x3dCreationMethod_fanta").hide();
		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").show();
    }); 
}



function askToChangeLook() {
    let isChangeConfirmed = window.confirm("Do you want to change the look of the page?");

    if (isChangeConfirmed) {
        changeLook();
    } else {
        changeBack();
    }
}

function changeLook() {
    counter += 1;
    switch (counter) {
        case 1:
            document.getElementById('bodycolor').style.backgroundColor = 'lightblue';
            document.getElementById('headercolor').style.backgroundColor = '#FF0000';
			document.getElementById('wrap').style.backgroundColor = 'lightblue';
            document.getElementById('footerColor').style.backgroundColor = '#FF9900';
            break;
        case 2:
            document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
            document.getElementById('wrap').style.backgroundColor = '#FF6600';
            document.getElementById('headercolor').style.backgroundColor = '#FF9999';
            document.getElementById('footerColor').style.backgroundColor = '#996699';
            break;
        case 3:
            document.getElementById('bodyColor').style.backgroundColor = 'coral';
            document.getElementById('headercolorr').style.backgroundColor = 'darkcyan';
            document.getElementById('wrap').style.backgroundBlendMode = 'darkcyan';
            document.getElementById('footerColor').style.backgroundColor = 'darksalmon';
            break;
        case 4:
            counter = 0;
            document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
            document.getElementById('headercolor').style.backgroundColor = 'chocolate';
            document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
            break;
    }
}

function changeBack() {
    document.getElementById('bodyColor').style.backgroundColor = '#FFFFFF';
    document.getElementById('headercolor').style.backgroundColor = 'rgba(175,0,0,1)';
    document.getElementById('footerColor').style.backgroundColor = 'rgba(175,0,0,1)';
}




