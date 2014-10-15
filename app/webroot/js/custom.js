Foundation.libs.abide.pathshala = function(forms) {
  var self = this;
  forms.attr('novalidate', 'novalidate');

  this.settings.init = true;

  if (!this.settings.live_validate) return;

  forms
    .find('input, textarea, select')
    .on('blur change', function (e) {
      self.validate([this], e);
    });
}

Foundation.libs.abide.custom_validate = function(forms) {
      var self = this;
      return self.validate(forms.find('input, textarea, select').get(), "");
}
$(document).foundation();
$(document).foundation("topbar dropdown");
