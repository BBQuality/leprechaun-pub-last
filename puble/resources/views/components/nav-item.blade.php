<style>
.btn__gld {
  font-size: 14px;
  background: transparent;
  border: none;
  padding: 0.5em 1em;
  color: yellow;
  text-transform: uppercase;
  position: relative;
  transition: 0.5s ease;
  cursor: pointer;
}

.btn__gld::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 2px;
  width: 0;
  background-color: #ffc506;
  transition: 0.5s ease;
}

.btn__gld:hover {
  color: transparent;
  transition-delay: 0.5s;
}

.btn__gld:hover::before {
  width: 100%;
}

.btn__gld::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 0;
  width: 100%;
  background-color: #ffc506;
  transition: 0.4s ease;
  z-index: 2;
}

.btn__gld:hover::after {
  height: 100%;
  transition-delay: 0.4s;
  color: yellowgreen;
  position: absolute;
  z-index: -1;
}
</style>

<li>
    <a type="button" class="btn btn__gld text-yellow-900" {{ $attributes }}> {{ $slot }}</a>
</li> 