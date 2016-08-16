if (!window.shiro) {
    window.shiro = {
        'Views': {},
        'Models': {},
        'Routers': {},
        'Collections': {},
        'Global': {},
        'User': {}
    };
}

window.dispatcher = _.clone(Backbone.Events);
// Global functions
