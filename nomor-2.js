ascYear() {
      var data = [
        {
          type: "Foo",
          year: 1995,
        },
        {
          type: "Bar",
          year: 1993,
        },
        {
          type: "Foobar",
          year: 2020,
        },
      ];

      data.sort(function (a, b) {
        return parseFloat(a.year) - parseFloat(b.year);
      });

      console.log(data);
}