<style>

/* === Кнопки === */
.btn__gld {
  position: relative;
  display: inline-block;
  padding: .75rem 1.5rem;
  font-size: 1rem;
  font-weight: bold;
  color: var(--clr-light);
  border: 2px solid var(--clr-accent);
  border-radius: 30px;
  background: transparent;
  text-transform: uppercase;
  transition: all .3s ease;
  cursor: pointer;
}

.btn__gld:hover,
.btn__gld:focus {
  background: var(--clr-accent);
  color: var(--clr-dark);
  box-shadow: 0 0 12px rgba(255,176,59,0.7);
}


</style>

<li>
    <a type="button" class="filter btn__gld text-yellow-900" {{ $attributes }}> {{ $slot }}</a>
</li>
