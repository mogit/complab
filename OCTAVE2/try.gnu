set term png
set output "plot2.png"
set title "Random Probablity Distributions"
set xlabel "Values"
set ylabel "Probability"
set xtics 0,5,50
set boxwidth 1
set xrange [-0.5:50.5]
set style data histograms
set style histogram rowstacked
set style fill solid

plot "s11.txt" title "h11",\
"s12.txt" title "h12",\
"s13.txt" title "h13",\
"s21.txt" title "h21",\
"s22.txt" title "h22",\
"s23.txt" title "h23",\
"s31.txt" title "h31",\
"s32.txt" title "h32",\
"s33.txt" title "h33",\
"s41.txt" title "h41",\
"s42.txt" title "h42",\
"s43.txt" title "h43"

unset title
unset xlabel
unset ylabel
unset style data

plot "y1.txt" title "y1",\
"y2.txt" title "y2",\
"y3.txt" title "y3"

pause -1
~
