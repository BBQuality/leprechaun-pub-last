<style>
    .slider__block {
    background-color: rgba(229,229,229, 1);
    height: 80vh;   
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 12px;
}

/* ===== FOR DEMO ===== */
.demo {
    height: 80%;
    width: -webkit-fill-available;
    margin: 0 auto;
    -moz-box-shadow: -1px 9px 18px -5px rgba(17, 17, 17, 1);
    overflow: hidden;
    position: relative;
}

/* ====== MAIN CODE ===== */
.coursemeal {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: row;
    align-content: center;
    flex-wrap: wrap;
    column-gap: 2px;
    border-radius: 0% 0% 0% 0%;
}

.coursemeal__div {
    flex: 0 0 19%;
    position: relative;
}

.responsive-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    border-radius: 20% 20% 20% 20%;
}

.coursemeal-info {
    background-color: rgb(36 78 28 / 31%);
    position: absolute;
    top: 0px;
    width: 90%;
    height: 40%;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    transition: all 0.4s;
    align-content: stretch;
    align-items: center;
    border-radius: 8% 0% 60% 2%;
}

.coursemeal-info__link:link,
.coursemeal-info__link:visited {
    font-size: 24px;
    color: #ffedd3;
    text-align: center;
    letter-spacing: 1.8px;
    margin: 0;
    text-decoration: none;
    transition: all 0.4s;
}

.coursemeal__div:hover .coursemeal-info {
    height: 100%;
    background-color: rgba(0,0,0, 0.6);
}

@media only screen and (max-width: 1200px) {
    .slider__block {
        flex-wrap: wrap;
    }

    .demo-description { 
        padding: 0;
        flex: 0 0 100%;
        text-align: center;
    }

}

@media only screen and (max-width: 991px) {
    .demo-description  {
        margin-bottom: 30px;
    }

    .coursemeal  {
        height: 680px;
        flex-wrap: wrap;
    }

    .coursemeal__div {
        flex: 0 0 100%;
        height: 20%;
    }

    .responsive-img img {
        height: 100%;
    }

    .coursemeal__div:nth-of-type(2) img {
        object-position: 50% 70%;
    }

    .coursemeal-info {
        height: 20%
    }
}

@media only screen and (max-width: 767px) {
    .coursemeal__div:nth-of-type(1) img {
        object-position: 50% 75%;
    }

    .coursemeal__div:nth-of-type(3) img {
        object-position: 50% 60%;
    }    

    .coursemeal-info__title {
        font-size: 25px;
    }    
}
</style>
<div class="box">

    <div class="demo coursemeal">

        <!-- OFFER-->
        <div class="coursemeal__div ">
            
            <picture class="responsive-img">
                <source media="(min-width: 992px)" srcset="https://i.postimg.cc/jSTZmp8H/appetizer-img-1.jpg">
                <source media="(min-width: 767px)" srcset="https://i.postimg.cc/1RTdCYhB/appetizer-img-2.jpg">
                <source srcset="https://i.postimg.cc/TwnctQr7/appetizer-img-3.jpg">
                <img src="https://i.postimg.cc/jSTZmp8H/appetizer-img-1.jpg" alt="Appetizer" >
            </picture>     
            
            <div class="coursemeal-info">
                <a href="#" class="coursemeal-info__link">Обідня пропозиція *</a>
            </div>
        </div>

        <!-- MAIN MENU-->
        <div class="coursemeal__div">
            
            <picture class="responsive-img">
                <source media="(min-width: 992px)" srcset="https://i.postimg.cc/V6NCCRK0/maindish-img-1.jpg">
                <source media="(min-width: 767px)" srcset="https://i.postimg.cc/9XYj186s/maindish-img-2.jpg">
                <source srcset="https://i.postimg.cc/pLY8dt4q/maindish-img-3.jpg">
                <img src="https://i.postimg.cc/V6NCCRK0/maindish-img-1.jpg" alt="Main Course" >
            </picture> 

            <div class="coursemeal-info">
                <a href="#" class="coursemeal-info__link">Головне Меню</a>
            </div>            
        </div>

        <!-- BIG COMPANY-->
        <div class="coursemeal__div ">
            
            <picture class="responsive-img">
                <source media="(min-width: 992px)" srcset="https://i.postimg.cc/jSTZmp8H/appetizer-img-1.jpg">
                <source media="(min-width: 767px)" srcset="https://i.postimg.cc/1RTdCYhB/appetizer-img-2.jpg">
                <source srcset="https://i.postimg.cc/TwnctQr7/appetizer-img-3.jpg">
                <img src="https://i.postimg.cc/jSTZmp8H/appetizer-img-1.jpg" alt="Appetizer" >
            </picture>     
            
            <div class="coursemeal-info">
                <a href="#" class="coursemeal-info__link">Страви на велику компанію</a>
            </div>
        </div>

        <!-- Drinks-->
        <div class="coursemeal__div">
            
            <picture class="responsive-img">
                <source media="(min-width: 992px)" srcset="https://i.postimg.cc/9FfLh6ZZ/dessert-img-1.jpg">
                <source media="(min-width: 767px)" srcset="https://i.postimg.cc/FsRXBnKn/dessert-img-2.jpg">
                <source srcset="https://i.postimg.cc/ZKcFCVFZ/dessert-img-3.jpg">
                <img src="https://i.postimg.cc/ZKcFCVFZ/dessert-img-1.jpg" alt="Desserts">
            </picture>

            <div class="coursemeal-info">
                <a href="#" class="coursemeal-info__link">Напої</a>
            </div>              
        </div>

        <!-- COCTAILS-->
        <div class="coursemeal__div">
            
            <picture class="responsive-img">
                <source media="(min-width: 992px)" srcset="https://i.postimg.cc/9FfLh6ZZ/dessert-img-1.jpg">
                <source media="(min-width: 767px)" srcset="https://i.postimg.cc/FsRXBnKn/dessert-img-2.jpg">
                <source srcset="https://i.postimg.cc/ZKcFCVFZ/dessert-img-3.jpg">
                <img src="https://i.postimg.cc/ZKcFCVFZ/dessert-img-1.jpg" alt="Desserts">
            </picture>

            <div class="coursemeal-info">
                <a href="#" class="coursemeal-info__link">Коктейлі</a>
            </div>              
        </div>


    </div>
    </div>