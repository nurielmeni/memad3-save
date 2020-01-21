$(function(){
    //get the click of modal button to create / update item
    //we get the button by class not by ID because you can only have one id on a page and you can
    //have multiple classes therefore you can have multiple open modal buttons on a page all with or without
    //the same link.
//we use on so the dom element can be called again if they are nested, otherwise when we load the content once it kills the dom element and wont let you load anther modal on click without a page refresh
      $(document).on('click', '.show-ajax-modal', function(){
         //check if the modal is open. if it's open just reload content not whole modal
        //also this allows you to nest buttons inside of modals to reload the content it is in
        //the if else are intentionally separated instead of put into a function to get the 
        //button since it is using a class not an #id so there are many of them and we need
        //to ensure we get the right button and content. 
        var url = $(this).data('ajax-form-url');
        var title = $(this).data('ajax-form-title');
        var modalContent;
        
        if ($('#ajax-form-modal').data('bs.modal').isShown) {
            modalContent = $('#ajax-form-modal').find('.modal-content');                
        } else {
            //if modal isn't open; open it and load content
            modalContent = $('#ajax-form-modal').modal('show').find('.modal-content');        
        }
        
        if (url !== undefined && url.length && modalContent.length) {
            $(modalContent).load(url, function() {
                //dynamiclly set the header for the modal
                $('#ajax-form-modal .modal-header h1').html(title);
            });
        }
    });
    
    var modalLoader = '<div style="text-align:center"><img src="/images/loader.gif"></div>';
    $('#ajax-form-modal').on('hidden.bs.modal, show.bs.modal', function () {
        $(this).find('.modal-content').html(modalLoader);
    });
});