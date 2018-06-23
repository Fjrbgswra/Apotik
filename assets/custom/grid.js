$(function() {
  $.ajax({
    type: "GET",
    url: "getAllObat"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "300px",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "getAllObat",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addDoktor",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "updateDoktor",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "deleteDoktor",
            data: item
          });
        }
      },
      fields: [
        {
          name: "Nama",
          title: "Nama Obat",
          type: "text",
          width: 150
        },
        {
          name: "Nip",
          title: "Spesialis",
          type: "text",
          width: 50
        },
        {
          name: "Tanggal",
          title: "Tanggal Lahir",
          type: "text",
          width: 50
        },
        {
          name: "alamat",
          title: "Alamat",
          type: "text",
          width: 50
        },
        {
          name: "foto",
          title: "Foto",
          type: "text",
          width: 50
        },
        { type: "control" }
      ]
    });
  });
});
