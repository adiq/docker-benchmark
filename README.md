# Docker Benchmarks
Benchmark results of various docker configurations

|                           | native   | nfs          | sync-native | sync-unison | sync-rsync |
|---------------------------|----------|--------------|-------------|-------------|------------|
| docker-machine virtualbox | 8.2393s  | 0.8879s      | n/a         | 0.3327s     | 0.2382s    |
| docker-machine xhyve      | 0.0883s  | 1.0770s      | n/a         | 0.3150s     | 0.1860s    |
| docker for mac            | 22.7092s | n/a          | 0.5592s     | 0.4136s     | 0.3242s    |
| docker for mac edge       | 23.4277s | n/a          | ?           | ?           | ?          |

## Method of testing

Tests was executed on:

MacBook Pro (Retina, 13-inch, Early 2015):
* CPU: `2,7 GHz Intel Core i5`
* RAM: `16 GB 1867 MHz DDR3`
* OS: `macOS High Sierra 10.13.1`ver

Tests was measured by `time` command
At first, the average score was calculated using `Dumbbench`, but it turned out that it takes into account the time of spinning up/destroying containers which is not as important and leads to incorrect average times. Now, average times are calculated manually.

Docker Machine and Docker For Mac was always executed with 2 CPUs and 8GB of memory; using same 100MB file.
