function createDynamicApp(name, vars) {
  this.name = name;
  this.vars = vars;
  this.set = (n, v) => {
    this.vars[n] = v;
    this.render();
    return this.vars[n];
  };
  this.comp = (val) => {
    let f = new Function(val);
    return f.call(this.vars, []);
  };
  this.render = function () {
    let apps = document.querySelectorAll('[data-app="app"]');
    apps.forEach((app) => {
      let dynamics = app.querySelectorAll(`dynamic`);
      let all = app.querySelectorAll(`*`);
      dynamics.forEach((d) => {
        let val = d.getAttribute("val");
        d.innerHTML = this.comp(val);
      });
      all.forEach((b) => {
        let p_binds = [...b.attributes].filter((a) => a.name.startsWith(":"));

        p_binds.forEach((a) => {
          b.setAttribute(a.name.slice(1), this.comp(a.value));
        });
      });
    });
  };
  this.render();
}
