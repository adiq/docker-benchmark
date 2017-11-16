# Docker Benchmarks
Benchmark results of various docker configurations

_[table of results will go here]_

## Method of testing

Tests was runned on:

MacBook Pro (Retina, 13-inch, Early 2015):
* CPU: `2,7 GHz Intel Core i5`
* RAM: `16 GB 1867 MHz DDR3`
* OS: `macOS High Sierra 10.13.1`ver

Tests was meansured by `time` command and the average score was calculated using perl `Dumbbench`

Docker Machine and Docker For Mac was always runned at 2 CPUs and 8GB of memory using same 100MB file.

# Used commands

Dumbbench:
`dumbbench --precision 0.80 --initial 10 --maxiter 100 --float -- <command>`

mkfile: 
`mkfile -n 100M test.dat`

