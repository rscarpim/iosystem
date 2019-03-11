  document.addEventListener('DOMContentLoaded', function() {



    let elems = document.querySelectorAll('.collapsible');
    let instances = M.Collapsible.init(elems);

    let ElSideNave    = document.querySelectorAll('.sidenav');
    let SidInstances  = M.Sidenav.init(ElSideNave);
  });