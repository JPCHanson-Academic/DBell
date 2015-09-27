$(document).ready(function(){
    //when the panel is on the top left slide right
    $("#SocialLabelTopLeft").mouseenter(function(){
        $("#SocialLabelTopLeft").animate({left: '55px'});
	$("#socialBtnContainerTopLeft").animate({left:'0px'});
    });
    $("#socialMediaPanelLeft").mouseleave(function(){
        $("#SocialLabelTopLeft").animate({left: '-20px'});
	$("#socialBtnContainerTopLeft").animate({left:'-75px'});
    });

    //when the panel is on the top right slide left
    $("#SocialLabelTopRight").mouseenter(function(){
        $("#SocialLabelTopRight").animate({right: '55px'});
        $("#socialBtnContainerTopRight").animate({right:'0px'});
    });
    $("#socialMediaPanelRight").mouseleave(function(){
        $("#SocialLabelTopRight").animate({right: '-20px'});
        $("#socialBtnContainerTopRight").animate({right:'-75px'});
    });

    //when the panel is on the bottom left slide right
    $("#SocialLabelBottomLeft").mouseenter(function(){
        $("#SocialLabelBottomLeft").animate({left: '55px'});
        $("#socialBtnContainerBottomLeft").animate({left:'0px'});
    });
    $("#socialMediaPanelLeft").mouseleave(function(){
        $("#SocialLabelBottomLeft").animate({left: '-20px'});
        $("#socialBtnContainerBottomLeft").animate({left:'-75px'});
    });
    
    //when the panel is on the bottom right slide left
    $("#SocialLabelBottomRight").mouseenter(function(){
        $("#SocialLabelBottomRight").animate({right: '55px'});
        $("#socialBtnContainerBottomRight").animate({right:'0px'});
    });
    $("#socialMediaPanelRight").mouseleave(function(){
        $("#SocialLabelBottomRight").animate({right: '-20px'});
        $("#socialBtnContainerBottomRight").animate({right:'-75px'});
    });

});
