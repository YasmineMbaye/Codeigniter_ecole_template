<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
    <li class="breadcrumb-item"><a href="#">Produits</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ordinateurs</li>
  </ol>
</nav>

<style>
  .breadcrumb {
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    gap: 0.5em;
  }
  .breadcrumb-item::after {
    content: ">";
    margin-left: 0.5em;
  }
  .breadcrumb-item:last-child::after {
    content: "";
  }
  .breadcrumb-item a {
    text-decoration: none;
    color: blue;
  }
  .breadcrumb-item.active {
    font-weight: bold;
    color: #555;
  }
</style>
