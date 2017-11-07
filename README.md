TDD Coaching
============

A (very) simple example of how to write tests. Currently covering Unit tests only.

_Note_: This project was done as a demo project for series of TDD/BDD coaching for
[Cogeco Connexion][1]. As such, the project assumes:
- A Windows environment
- Docker for Windows
- You're using a terminal like [Console Emulator][2] or [Cmder][3]

## Installation
_Note_: You will need to be on an open network (`CCX-Contractors` works within Cogeco)
```
sh bin/composer.sh install
```

## Running the tests
### Unit
```
sh bin/phpspec.sh run
```
### Integration
```
sh bin/phpunit.sh
```

[1]: http://www.cogeco.ca
[2]: https://conemu.github.io/
[3]: http://cmder.net/