@if ($valid)
    <button id="logoutButton">Вийти</button>
@else
    <button type="submit">Увійти</button>
@endif
<script>
document.getElementById('logoutButton').addEventListener('click', function() {
    fetch('/logout', {
        method: 'POST',
        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
    })
    .then(response => response.json())
    .then(data => alert(data.message))
    .catch(error => console.error('Error:', error));
});
</script>
