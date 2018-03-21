/**
    *@class Main
    *@desc  Clase inicializadora de la pagina de test.  
    *@author Cristian Mari
 */


    /* @ */
    const async = {

        /* @ */
        "productList"   : ()          => {
            return fetch('https://private-70cb45-aobara.apiary-mock.com/product/list')
            .then(response => response.json())
            .then(dataJson => {

                /* @ */    
                let $wrapper  = $('#productChoose'),
                    $select   = $wrapper.find('select'),
                    $option   = $('<option/>');

                /* @ */
                $select.html('');

                /* @ */
                dataJson.forEach((value,key) => {

                    /* @ */
                    if(value.hasOwnProperty('description')){

                        /* @ */
                        let $clone = $option.clone();
                            $clone.text(value.description);
                            $clone.attr('data-min',value.minQuantity);
                            $clone.attr('value',value.id);
                            $clone.attr('data-price',value.unitPriceInCents);

                        /* @ */
                        $select.append($clone);

                    }

                });

            });
        }, 
        
        /* @ */
        "photos"        : (productId) => {
            return fetch('https://private-70cb45-aobara.apiary-mock.com/product/'+(typeof productId != 'undefined' ? productId : 1)+'/photos')
                    .then(response => response.json())
                    .then(dataJson => {
        
                        /* @ */
                        let $gallery    = $('#gallery'),
                            $wrapper    = $gallery.find('ol'),
                            $thumbnail  = $('<li><a><img></a></li>');
        
                        /* @ */
                        $wrapper.find('li').remove();
        
                        /* @ */
                        dataJson.forEach((image,index) => {
        
                            /* @ */
                            let $template = $thumbnail.clone();
        
                            /* @ */
                            if(index == 0){
                                /* @ */
                                $template.addClass('active');

                                /* @ */
                                let $big = $gallery.find('figure');
                                /* @ */
                                $big.css('background-image',"url("+image.url+")");
                                $big.find('a').attr('href',image.url);

                            }
        
                            /* @ */
                            $template.find('a').attr('href',image.url).attr('data-id',image.id);
                            $template.find('img').attr('src',image.url);

                            /* @ */
                            $wrapper.append($template);
        
                        });
        
                    });
        },

        /* @ */
        "otherProducts" : ()          => {
            return fetch('https://private-70cb45-aobara.apiary-mock.com/related-product/list')
                .then(response => response.json())
                .then(dataJson   => {

                    /* @ */
                    let $wrapper    = $('#otherProducts'),
                        $template   = $('<div class="product col col-xs-10 col-xs-hide col-sm-5 col-sm-hide col-md-4 col-lg-4"><figure/><h1/><b><i class="fas fa-credit-card" />Desde $ 999</b><p/><a>CONTRATAR</a></div>');

                    /* @ */
                    $wrapper.html('');

                    /* @ */
                    dataJson.forEach((product,key) => {

                        /* @ */
                        let $clone = $template.clone();

                        /* @ */
                        if(key <= 1){
                            if(key > 0){
                                $clone.removeClass('col-xs-hide');
                            }
                            $clone.removeClass('col-sm-hide');
                        }

                        /* @ */
                        $clone.find('figure').css('background-image','url('+product.pictureUrl+')');
                        $clone.find('h1').text(product.title);
                        $clone.find('p').text(product.description);
                        
                        /* @ */
                        $wrapper.append($clone);

                    });


                });
        
        }

    };
    
    var Main = (function(){

        /* @ */
        function Main(){

            /* @ Initialize Gallery */
            this.gallery = new Gallery();

            /* @ Initialize Shop */
            this.shop    = new Shop({
                "wrapper"       : "#productShop",
                "product"       : {
                    "id"    : 1,
                    "title" : "",
                    "price" : 34900,
                    "qty"   : 1
                },
                "onchangeQty"   : (product) => {

                    /* @ */
                    shop.product = product;

                    /* @ */
                    Listeners.photos(product.id);

                }
            });

            /* @ */
            this.events();

        }

        /* @ */
        Main.prototype.events = function(){

            /* @ */
            let self = this;

            /* @ Change Product */
            $('#productChoose select').on('change',function(){

                /* @ */
                let $selected = $(this).find('option:selected');

                /* @ */
                self.shop.updateProduct({
                    "id"    : this.value,
                    "price" : $selected.attr('data-price'),
                    "title" : $selected.text(),
                    "minQty": $selected.attr('data-min')
                });

                /* @ */
                async.photos(self.shop.product.id).then(() => self.gallery.events());

            });

        };

        return Main;

    }());



/**  
    *@desc Luego de las cargas asincronicas del api, inicializa los eventos;
*/
Promise.all([async.productList(),       /* @ Variantes de productos en el select. */
             async.photos(),            /* @ Fotos de un producto */
             async.otherProducts()])    /* @ Productos Relacionados */
        .then(() => new Main());


/**
    *@desc Vinculo de panel de ingreso 
 */

$('#layoutLogin > a').on('click',(e) => {

    /* @ */
    e.preventDefault();

    /* @ */
    $('#loginContent').slideToggle();

});



$('#loginContent').on('mouseleave',() => {

    $('#loginContent').slideUp();

});



$('#loginContent input').on('keypress keyup keydown',function(e){

    /* @ */
    if(this.value == ''){
        $(this).removeClass('active');
    }else{
        $(this).addClass('active');
    }

});

/* @ */
$('#mobileMenu #openLogin').on('click',function(e){

    /* @ */
    e.preventDefault();

    /* @ */
    let $clone = $('#loginContent').clone();
        
    /* @ */
    $.fancybox.open({
        "src" : $clone[0].outerHTML,
        "type": "inline"
    });

    /* @ */
    $('#mobileMenu').hide();
    
});
/* @ */
$('#mobileHeader .openMenu').on('click',function(e){

    /* @ */
    $('#mobileMenu').show();

});
/* @ */
$('#mobileMenu #menuClose').on('click',function(e){

    /* @ */
    $('#mobileMenu').hide();

});
