# Docker for Mac & RSync

Logs:
```
$ dumbbench --precision 0.80 --initial 10 --maxiter 100 --float -- docker exec -it syncrsync_benchmark-sync-rsync_1 time dd if=/dev/zero of=/var/test/test.dat bs=1024 count=100000
100000+0 records in
100000+0 records out
real	0m 0.26s
user	0m 0.03s
sys	0m 0.23s
100000+0 records in
100000+0 records out
real	0m 0.33s
user	0m 0.00s
sys	0m 0.21s
100000+0 records in
100000+0 records out
real	0m 0.29s
user	0m 0.00s
sys	0m 0.21s
100000+0 records in
100000+0 records out
real	0m 0.23s
user	0m 0.01s
sys	0m 0.19s
100000+0 records in
100000+0 records out
real	0m 0.34s
user	0m 0.01s
sys	0m 0.19s
100000+0 records in
100000+0 records out
real	0m 0.21s
user	0m 0.01s
sys	0m 0.19s
100000+0 records in
100000+0 records out
real	0m 0.31s
user	0m 0.01s
sys	0m 0.20s
100000+0 records in
100000+0 records out
real	0m 0.34s
user	0m 0.03s
sys	0m 0.16s
100000+0 records in
100000+0 records out
real	0m 0.35s
user	0m 0.01s
sys	0m 0.20s
100000+0 records in
100000+0 records out
real	0m 0.35s
user	0m 0.03s
sys	0m 0.18s
100000+0 records in
100000+0 records out
real	0m 0.29s
user	0m 0.02s
sys	0m 0.26s
100000+0 records in
100000+0 records out
real	0m 0.59s
user	0m 0.02s
sys	0m 0.27s
cmd: Ran 11 iterations (1 outliers).
cmd: Rounded run time per iteration: 0.442500 +/- 0.009600 (2.2%)```