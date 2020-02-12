import Tabit from 'Tabit'
export default {
  init() {
    // JavaScript to be fired on the about us page
    const element = document.getElementById('tabs');
    const options = {
      buttonActiveClass: 'is-active',
    };
    const tabit = new Tabit(element, options); 
    return tabit;
  },
};
