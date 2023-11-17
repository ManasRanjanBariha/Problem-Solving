class Solution {
    public int minPairSum(int[] nums) {
     int min=Integer.MAX_VALUE;
     int max=Integer.MIN_VALUE;
     int []map=new int[100001];
     for(int num:nums)
     {
         map[num]++;
         max=Math.max(max,num);
         min=Math.min(min,num);
     }
     int left=min;
     int right=max;
     int maxSum=Integer.MIN_VALUE;
     while(left<=right)
     {
         if(map[left]==0)
         {
             left++;
         }
         else if(map[right]==0)
         {
             right--;
         }
         else{
             maxSum=Math.max(maxSum,left+right);
             map[left]--;
             map[right]--;
         }
     }
     return  maxSum;
    }
     
}