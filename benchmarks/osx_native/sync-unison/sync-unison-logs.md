# Docker for Mac & Unison

Logs:
```
> dumbbench --precision 0.80 --initial 10 --maxiter 100 --float -- docker exec -it syncunison_benchmark-sync-unison_1 time dd if=/dev/zero of=/var/test/test.dat bs=1024 count=100000
100000+0 records in
100000+0 records out
real	0m 0.44s
user	0m 0.01s
sys	0m 0.26s
100000+0 records in
100000+0 records out
real	0m 0.31s
user	0m 0.00s
sys	0m 0.26s
100000+0 records in
100000+0 records out
real	0m 0.26s
user	0m 0.02s
sys	0m 0.23s
100000+0 records in
100000+0 records out
real	0m 0.27s
user	0m 0.00s
sys	0m 0.27s
100000+0 records in
100000+0 records out
real	0m 0.27s
user	0m 0.02s
sys	0m 0.23s
100000+0 records in
100000+0 records out
real	0m 0.44s
user	0m 0.00s
sys	0m 0.27s
100000+0 records in
100000+0 records out
real	0m 0.38s
user	0m 0.01s
sys	0m 0.25s
100000+0 records in
100000+0 records out
real	0m 0.48s
user	0m 0.01s
sys	0m 0.25s
100000+0 records in
100000+0 records out
real	0m 0.27s
user	0m 0.00s
sys	0m 0.25s
100000+0 records in
100000+0 records out
real	0m 1.33s
user	0m 0.00s
sys	0m 0.32s
100000+0 records in
100000+0 records out
real	0m 0.39s
user	0m 0.01s
sys	0m 0.24s
100000+0 records in
100000+0 records out
real	0m 0.30s
user	0m 0.02s
sys	0m 0.23s
100000+0 records in
100000+0 records out
real	0m 0.38s
user	0m 0.01s
sys	0m 0.31s
100000+0 records in
100000+0 records out
real	0m 0.27s
user	0m 0.02s
sys	0m 0.23s
cmd: Ran 13 iterations (3 outliers).
cmd: Rounded run time per iteration: 0.427900 +/- 0.004300 (1.0%)```