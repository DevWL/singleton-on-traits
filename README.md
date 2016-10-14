# singleton-on-traits
implement your singleton pattern with traits (keep yourself DRY)

> Simply add 
```
use TraitsSingleton;
```
to body of another calss to transform this class to valied singleton in=mplementation


> PROS

- you don't have to retype singleton structure
- fast and easy implementation
- slightly more flexybility
- you can implement more than one traits in a class
- you can overload traits methods

> CONS

- extending another class from class that implements traits will not allow you to get modyfied instance of parent class.
- you can only create one instance of a class
- you can not extend from another class that implements traits to create new instance for that class. It will overwrite the old one. For that reason instance is set to private so that it throws exception "private property access"
