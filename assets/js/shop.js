var Shop = ((function(){

    /* @ */
    var Shop                        = function(opts){

        /* @ */
        this.$wrapper = (typeof opts == 'undefined' || typeof opts.wrapper == 'undefined' ? $('#productShop') : $(opts.wrapper));
        this.product = (typeof opts == 'undefined' || typeof opts.product == 'undefined' ? {} : opts.product);

        /* @ */
        this.events();

    };

    /* @ */
    Shop.prototype.events           = function(){

        /* @ */
        let self = this;

        /* @ */
        this.$wrapper.find('#productChoose #changeQty button[role]').each((key,element) => {
           element.addEventListener('click',function(e){

                /* @ */
                e.preventDefault();

                /* @ */
                let value = this.dataset.value;

                /* @ */
                self.changeQty(value);

            }); 
        });

    };

    /* @ */
    Shop.prototype.changeQty        = function(x){

        /* @ */
        let textQty = this.$wrapper.find('center'),
            minQty  = Math.abs(textQty.attr('data-min')),
            qty     = Math.abs(textQty.text()),
            newQty  = (x > 0 ? qty+1 : (qty == minQty ? minQty : qty-1));
            
        /* @ */
        textQty.html(newQty);

        /* @ */
        this.product.qty = newQty;
        
        /* @ */
        let price = this.product.qty * (this.product.price / 100);

        /* @ */
        this.$wrapper.find('p').eq(0).text('$ '+price.toFixed(2));

    };

    /* @ */
    Shop.prototype.updateProduct    = function(product){

        /* @ */
        this.product = Object.assign(this.product,product);

        /* @ */
        let price = ((this.product.price * this.product.qty) / 100).toFixed(2);

        /* @ */
        this.$wrapper.find('p').eq(0).html("$ "+price);

        /* @ */
        this.$wrapper.find('#productChoose #changeQty center').attr('data-min',product.minQty).text(product.minQty);

        /* @ */
        return this;


    }

    return Shop;

})());