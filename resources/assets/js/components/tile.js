import template from './../../html/components/tile.html'
import './../../stylus/components/tile.styl'

export default /** @ngInject */  function($compile, $rootScope) {
    return {
        template: template
    };
}