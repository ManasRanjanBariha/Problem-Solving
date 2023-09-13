package java;

import java.util.*;

class Candy {
    public int candy(int[] ratings) {
        int n=ratings.length;
        int []candies=new int[n];
        Arrays.fill(candies,1);
        for(int i=1;i<n;i++)
        {
            if(ratings[i] > ratings[i-1])
            {
                
                int temp=candies[i-1] + 1;
                candies[i]=Math.max(temp,candies[i]);
            }
        }
        for(int i=n-2;i>=0;i--)
        {
            if(ratings[i] > ratings[i+1])
            {
                int temp=candies[i+1] + 1;
                candies[i]=Math.max(temp,candies[i]);
            }
        }
        int totalCandies=0;
        for( int i :candies)
        {
            totalCandies += i;
        }
        return totalCandies;
    }
}