<section class="section top-section">
    <div class="content-container content-theme-dark">
      <div class="content-inner">
        <div class="content-center">
          <h1>МЕНЮ</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="section bottom-section">
    <div class="content-container content-theme-light">
      <div class="content-inner">
        <div class="content-center">
          <h1>МЕНЮ</h1>
        </div>
      </div>
    </div>
  </section>

<style>

    a{
  text-decoration: none;
}

/* Sections */
.section{
  height: 50vh;
  min-height: 300px;
  position: relative;
}

/* Containers */
.content-container{
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  clip: rect(auto, auto, auto, auto);
  pointer-events: none;
}
.content-inner{
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: 100%;
  padding: 0;
  z-index: 99;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  will-change: transform;
  -webkit-perspective: 1000;
  perspective: 1000;
  pointer-events: all;
}

.content-center{
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

/* Aesthetics */
.top-section{
  background-image: url(./images/drk_hero.webp);"
}
.bottom-section{
  background: #d4fef2;
}
.section h1{
  font-size: 300px;
  font-weight: 700;
  text-transform: uppercase;
  text-align: center;
}
.section p,
.section a{
  font-weight: 700;
  letter-spacing: 7px;
  text-transform: uppercase;
  text-align: center;
}

.content-theme-dark h1{
  color: #E33E39;
  text-shadow: 0 20px 40px rgba(0,0,0,.5);
}
.content-theme-dark p,
.content-theme-dark a{
  color: #FEA98D;
}
.content-theme-light h1{
  color:#062930;
  text-shadow: 0 20px 40px rgba(0,0,0,.5);
}
.content-theme-light p,
.content-theme-light a{
  color: #728E93;
}

</style>
