import { createPopper } from '@popperjs/core';
       

const popcorn = document.querySelector('#imghome');
const tooltip = document.querySelector('#tooltip');

createPopper(popcorn, tooltip, {
    placement: 'right',
  modifiers: [
    {
      name: 'offset',
      options: {
        offset: [0, 8],
      },
    },
  ],
});