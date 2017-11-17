# Docker Benchmarks
Benchmark results of various docker configurations

|                           | native   | nfs         | sync-native | sync-unison | sync-rsync |
|---------------------------|----------|-------------|-------------|-------------|------------|
| docker-machine virtualbox | 8.4340s  | 1.6406s     | unavailable | 0.5200s     | 0.3885s    |
| docker for mac            | 23.8400s | unavailable | 0.5880s     | 0.4279s     | 0.4425s    |

_above data is compiled from average time calculated by Dumbbench_

## Method of testing

Tests was executed on:

MacBook Pro (Retina, 13-inch, Early 2015):
* CPU: `2,7 GHz Intel Core i5`
* RAM: `16 GB 1867 MHz DDR3`
* OS: `macOS High Sierra 10.13.1`ver

Tests was measured by `time` command and the average score was calculated using perl `Dumbbench`

Docker Machine and Docker For Mac was always executed with 2 CPUs and 8GB of memory; using same 100MB file.

# Used commands

Dumbbench:
`dumbbench --precision 0.80 --initial 10 --maxiter 100 --float -- <command>`

mkfile: 
`mkfile -n 100M test.dat`

