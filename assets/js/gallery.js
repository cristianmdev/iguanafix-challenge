/* @ */
Gallery = (function(){

    /* @ */
    function Gallery(opts){

        /* @ */
        this.opts        = (typeof opts != 'undefined'                                      ?  {}                   : opts);

        /* @ */
        this.$wrapper    = (typeof opts != 'undefined' && opts.hasOwnProperty('wrapper')    ?  $(opts.wrapper)      : $('[data-widget="gallery"]'));
        this.$big        = (typeof opts != 'undefined' && opts.hasOwnProperty('big')        ?  $(opts.thumbnails)   : this.$wrapper.find('figure'));
        this.$thumbnails = (typeof opts != 'undefined' && opts.hasOwnProperty('thumbnails') ?  $(opts.thumbnails)   : this.$wrapper.find('li'));
        
        /* @ */
        this.events();

        return this;

    }

    /* @ */
    Gallery.prototype.events = function(){

        /* @ */
        this.$thumbnails = $(this.$thumbnails.selector);

        /* @ */
        let self = this;

        /* @ */
        this.$thumbnails.find('a').on('click',function(e){

            /* @ */
            e.preventDefault();

            /* @ */
            let imageSrc = this.href;

            /* @ */
            self.$big.css('backgroundImage',"url("+imageSrc+")");
            self.$big.find('a').attr('href',imageSrc);

            /* @ */
            self.$thumbnails.removeClass("active");

            /* @ */
            this.parentNode.classList.add("active");

        });

        /* @ */
        this.$big.find('a').on('click',function(e){

            /* @ */
            e.preventDefault();

            /* @ */
            $.fancybox.open({
                "type" : "image",
                "src"  :  this.href
            });

        });

        /* @ */
        return this;

    };

    
    /* @ */
    return Gallery;

}());