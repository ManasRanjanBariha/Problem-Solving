package december;
class MaximumProductofTwoElementsinanArray {
    public int maxProduct(int[] nums) {
        int m=Integer.MIN_VALUE;
        int n=Integer.MIN_VALUE;
        for(int i=0;i<nums.length;i++)
        {
            if(nums[i]>= n)
            {
                m=n;
                n=nums[i];
            }
            if(nums[i] < n && nums[i]> m)
            {
                 m=nums[i];
            }
        }
        System.out.println(m+"  "+n);
        return ((n-1)*(m-1));
    }
}