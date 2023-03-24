// JavaScript Objects

 /* a collection of related data and/or functionality
    - consist of several properties and methods
    - object properties are name:value pairs
    object methods are actions that can be performed on objects
        * these are object properties that contain a function definition 
    An object literal is a list of name:value pairs inside curly brackets
        * easiest way to create an object
    - "this" refers to the owner (object) of a function

 */
 

  // example:

    const car = {
      // properties
                 make: 'Chevrolet', 
                 model: 'Camaro',
                 year: 1967,
                 image: 'images/67-camaro.jpg',
                 name: ["Bob", "Smith"],
                 city: 'Los Angeles',
                 state: 'California',
        //methods
                 title: function() { 
                         return this.year + ' ' + this.make + ' ' + this.model;
                         },
                 profile: function() {
                           return this.name[0] + ' ' + this.name[1] + ' ' + ' ' + ' ' + this.city + ', ' + this.state;
                         }
    }
               
  /* HTML Document Object Model (DOM)

     - Defines how to get, change, add, or delete HTML elements

     - browser creates a model of a webpage
         
     - HTML elements are treated as objects

     - find HTML elements using id, tag name, class name, CSS selectors, or HTML     
       object collections

    - a property is a value that you can get or set (innerHTML)

    - a method is an action you can take (getElementById)

  */
  document.getElementById("title").innerHTML = car.title();
  document.getElementById("carImg").src = car.image;
  document.getElementById("profile").innerHTML = car.profile();
