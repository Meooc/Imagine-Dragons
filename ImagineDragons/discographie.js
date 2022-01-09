$(".btn").click(function() {
    var currentTarget = $(this).attr("data-target");
    var currentHTML = $(this);

    $(currentTarget).on('hidden.bs.collapse', function() {
      currentHTML.html("Voir les titres" + "<section class='glyphicon glyphicon-th-list' aria-hidden='true'></section>")

    })

    $(currentTarget).on('shown.bs.collapse', function() {
      currentHTML.html("Fermer la liste" + "<section class='glyphicon glyphicon-th-list' aria-hidden='true'></section>")

    })

  });