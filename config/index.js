var configValues = require('./config');

module.exports = {
    getDbConnectionString: function() {
        return `mongodb://${configValues.username}:${configValues.password}@ds225253.mlab.com:25253/user`;
    }
}